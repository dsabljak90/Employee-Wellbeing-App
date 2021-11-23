import { Link } from "react-router-dom";
export default function Header({ user }) {
    return (
        <>
            <header className="header">
                <div className="header-firstpart">
                    <div className="network"></div>
                    <div className="small-title">
                        <h3>{/* <Link to="/info">{user}</Link>{" "} */}</h3>
                        <h2>Small title above</h2>
                        <div className="links">
                            <a href="#about-us">
                                <li>About Us</li>
                            </a>
                            <a href="">
                                <li>Link </li>
                            </a>
                            <a href="">
                                <li>Link </li>
                            </a>
                            <a href="">
                                <li>Link </li>
                            </a>
                            <a href="">
                                <li>Link </li>
                            </a>
                        </div>
                        <div className="short-line"></div>
                        <div className="big-title">
                            <h1>Big Titile</h1>
                        </div>
                    </div>

                    <div className="header-login">
                        <a href="/login">Login</a>
                        <a href="/login">
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
