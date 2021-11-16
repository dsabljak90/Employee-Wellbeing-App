export default function Header() {
    return (
        <>
            <header className="header">
                <div className="header-firstpart">
                    <div className="small-title">
                        <h2>Small title above</h2>
                        <div className="links">
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
                            <a href="">
                                <li>Link </li>
                            </a>
                        </div>
                        <div className="short-line"></div>
                        <div className="big-title">
                            <h3>Small title</h3>
                            <h1>Big Titile</h1>
                        </div>
                    </div>

                    <div className="header-login">
                        <a href="">Login</a>
                        <div className="test-button">Test/Results</div>
                    </div>
                </div>
            </header>
            <div className="big-picture">
                <img src="/img/background-two.jpg" />
            </div>
        </>
    );
}
