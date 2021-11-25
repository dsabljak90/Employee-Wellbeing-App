import { Link } from "react-router-dom";
export default function Header({ user }) {
    return (
        <>
            <header className="header">
                <div className="header-firstpart">
                    <div className="network"></div>
                    <div className="small-title">
                        <h3>{/* <Link to="/info">{user}</Link>{" "} */}</h3>
                        <h2></h2>
                        <div className="links">
                            <a href="/">
                                <li>Home</li>
                            </a>
                            <a href="">
                                <li>About Us</li>
                            </a>
                            <a href="">
                                <li>General Advices </li>
                            </a>
                            <a href="">
                                <li>Blog</li>
                            </a>
                            <a href="">
                                <li>Test </li>
                            </a>
                            <a href="">
                                <li>Contact </li>
                            </a>
                        </div>
                        <div className="short-line"></div>
                        <div className="big-title">
                            <h1>Manatu Wellbeing</h1>
                        </div>
                    </div>

                    <div className="header-login">
                        <a href="/test">
                            <div className="test-button">Test/Results</div>
                        </a>
                    </div>
                </div>
            </header>
            <div className="big-picture">
                <img src="/img/background-two.jpg" />
            </div>
        </>
    );
}
