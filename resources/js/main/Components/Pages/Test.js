export default function Test() {
    return (
        <>
            <div className="test">
                <div className="test-text">
                    <h1>Test</h1>
                    <div className="short-line"></div>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt explicabo.
                        Mauris dictum facilisis augue. Nulla quis diam.
                    </p>

                    <h3>To take test you have login or register.</h3>
                    <a href="/login">
                        <div className="reg-button">Register/Login</div>
                    </a>
                </div>
                <div className="test-buttons">
                    <a href="/test">
                        <div className="reg-button reg-button_test">Test </div>
                    </a>
                    <a href="/statistics">
                        <div className="reg-button reg-button_result ">
                            Results
                        </div>
                    </a>
                </div>
            </div>
        </>
    );
}
