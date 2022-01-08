import { Link } from "react-router-dom";
export default function Header({ user }) {
    const handleItemClick = (event) => {
        event.preventDefault();
        const target = event.target.getAttribute("href");
        console.log(target);
        const element = document.getElementById(target);
        element.scrollIntoView({
            behavior: "smooth",
        });
    };
    return (
        <>
            <header className="header">
                <div className="header-firstpart">
                    <div className="network">
                        <img src="/img/logo.png"></img>
                    </div>
                    <div className="small-title">
                        <h3>{/* <Link to="/info">{user}</Link>{" "} */}</h3>
                        <h2></h2>
                        <div className="links">
                            <a onClick={handleItemClick} href="/">
                                Home
                            </a>
                            <a onClick={handleItemClick} href="aboutUs">
                                About Us
                            </a>
                            <a onClick={handleItemClick} href="advices">
                                General Advices
                            </a>
                            <a onClick={handleItemClick} href="blog">
                                Blog
                            </a>
                            <a onClick={handleItemClick} href="test">
                                Test
                            </a>
                            <a onClick={handleItemClick} href="contact">
                                Contact
                            </a>
                        </div>
                        <div className="short-line"></div>
                        <div className="big-title">
                            <h1>Manatu Wellbeing</h1>
                        </div>
                    </div>
                    <div className="header-login">
                        <a href="/login">
                            <div className="test-button">Login/Register</div>
                        </a>
                    </div>
                </div>
            </header>

            <img className="big-picture" src="/img/background-two.jpg" />
        </>
    );
}
