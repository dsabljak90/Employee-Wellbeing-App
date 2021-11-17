import Login from "./Login";
import Registration from "./Registration";
import Header from "./Pages/Header";
import AboutUs from "./Pages/Aboutus";
import Advices from "./Pages/Advices";
import Blog from "./Pages/Blog";
import Test from "./Pages/Test";
import Footer from "./Pages/Foorter";

export default function App() {
    return (
        <div className="main-background">
            <Header />
            <AboutUs />
            <Advices />
            <Blog />
            <Test />
            <Footer />
        </div>
    );
}
