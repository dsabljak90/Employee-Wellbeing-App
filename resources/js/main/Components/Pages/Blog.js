export default function Blog() {
    return (
        <>
            <div className="long-line"></div>
            <h1>Blog</h1>
            <div className="short-line"></div>
            <div className="blog">
                <div className="blog-container">
                    <div className="blog-articles">
                        <div className="article">
                            <img src="/img/advice.jpg"></img>
                            <a
                                className="https://hbr.org/2021/10/7-strategies-to-improve-your-employees-health-and-well-being"
                                href=""
                            >
                                <h3>
                                    7 Strategies to Improve Your Employees’
                                    Health and Well-Being
                                </h3>
                            </a>
                        </div>
                    </div>

                    <div className="blog-articles-1">
                        <div className="article">
                            <img src="/img/advice.jpg"></img>
                            <a className="blog-link" href="">
                                <h3>Name of Article</h3>
                            </a>
                        </div>
                    </div>

                    <div className="blog-articles-2">
                        <div className="article">
                            <img src="/img/advice.jpg"></img>
                            <a className="blog-link" href="">
                                <h3>Name of Article</h3>
                            </a>
                        </div>
                    </div>

                    <div className="blog-articles-3">
                        <div className="article">
                            <img src="/img/advice.jpg"></img>
                            <a className="blog-link" href="">
                                <h3>Name of Article</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div className="long-line"></div>
        </>
    );
}
