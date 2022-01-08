export default function Test() {
    return (
        <>
            <div className="test" id="test">
                <div className="test-text">
                    <h1>Test</h1>
                    <div className="short-line"></div>
                    <p>
                        Your wellbeing matters to us! Take a few minutes to
                        answer seven simple questions. Just click on the button
                        right and here you go!
                    </p>

                    <h3>To take test you have login or register.</h3>
                    <a href="/login">
                        <div className="reg-button">Register/Login</div>
                    </a>
                </div>
                <div className="test-buttons">
                    <a href="/test/2">
                        <div className="reg-button_test">Test </div>
                    </a>
                    <a href="/statistics">
                        <div className=" reg-button_result ">Results</div>
                    </a>
                </div>
            </div>
        </>
    );
}
