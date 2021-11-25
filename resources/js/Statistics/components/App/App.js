import React from "react";
import axios from "axios";
import { useEffect, useState } from "react";
import { get } from "../../../util/request";

import {
    BarChart,
    Bar,
    Cell,
    XAxis,
    YAxis,
    CartesianGrid,
    Tooltip,
    Legend,
    ResponsiveContainer,
} from "recharts";

export default function App() {
    const [answers, setAnswers] = useState([]);
    const getAnswers = async () => {
        const userId = document.querySelector("input").value;
        const resp = await axios.get("/api/answers?user_id=" + userId);

        console.log(resp.data);
        setAnswers(resp.data);
    };
    // console.log(answers[0].answer);
    useEffect(() => {
        getAnswers();
    }, []);

    const data = [
        {
            name: "Question 1",

            pv: answers.answer,
        },
        {
            name: "Question 2",

            pv: 8,
        },
        {
            name: "Question 3",

            pv: 2,
        },
        {
            name: "Question 4",

            pv: 1,
        },
        {
            name: "Question 5",

            pv: 6,
        },
        {
            name: "Question 6",

            pv: 5,
        },
    ];

    return (
        <ResponsiveContainer width="100%" aspect={3}>
            <BarChart
                width={500}
                height={300}
                data={answers.map((answer, i) => {
                    return {
                        name: "Question " + answer.question_id,
                        pv: answer.answer,
                    };
                })}
                margin={{
                    top: 5,
                    right: 30,
                    left: 20,
                    bottom: 5,
                }}
            >
                <CartesianGrid strokeDasharray="3 3" />
                <XAxis dataKey="name" tick={{ stroke: "red" }} />
                <YAxis tick={{ stroke: "blue" }} />
                <Tooltip />
                <Legend />
                <Bar dataKey="pv" fill="#8884d8" />
            </BarChart>
        </ResponsiveContainer>
    );
}
