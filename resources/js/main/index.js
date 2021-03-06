import React from "react";
import ReactDOM from "react-dom";
import { NavLink } from "react-router-dom";
import App from "./Components/App";

ReactDOM.render(
    <App user={document.getElementById("app").dataset.user} />,
    document.getElementById("app")
);
