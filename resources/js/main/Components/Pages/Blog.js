export default function Blog() {
    return (
        <>
            <div className="long-line"></div>
            <h1>Blog</h1>
            <div className="short-line"></div>
            <div id="blog" className="blog">
                <div className="blog-container">
                    <div className="blog-articles">
                        <div className="article">
                            <img src="/img/blog1.jpg"></img>
                            <a
                                className="blog-link"
                                href="https://hbr.org/2021/10/7-strategies-to-improve-your-employees-health-and-well-being"
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
                            <img src="/img/blog2.jpg"></img>
                            <a
                                className="blog-link"
                                href="https://www.raconteur.net/the-hive/hr-remote-workforce-wellbeing/"
                            >
                                <h3>
                                    Ensuring the wellbeing of your remote
                                    workforce
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div className="blog-articles-2">
                        <div className="article">
                            <img src="/img/blog3.jpg"></img>
                            <a
                                className="blog-link"
                                href="https://www.theatlantic.com/science/archive/2016/12/the-best-music-for-productivity-silence/509948/"
                            >
                                <h3>
                                    The Best Music for Productivity? Silence
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div className="blog-articles-3">
                        <div className="article">
                            <img src="/img/blog4.jpg"></img>
                            <a
                                className="blog-link"
                                href="https://medium.com/@drsimonj/thinking-decisions-and-data-chapter-3-the-lazy-controller-2dd363d33d5a"
                            >
                                <h3>
                                    Thinking, Decisions and Data: Chapter 3 —
                                    The Lazy Controller
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div className="long-line"></div>
        </>
    );
}
