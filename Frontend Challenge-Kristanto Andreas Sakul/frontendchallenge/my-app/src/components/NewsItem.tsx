import React from "react"
import './newsitems.css'

const NewsItem = ({ title, description, url, urlToImage }:{title:any, description:any, url:any, urlToImage:any}) => {
    return(
        <div className="news-app">
            <div className="news-item">
                <img className="news-img" src={urlToImage} alt={urlToImage} />
                <h3><a href={url}>{title}</a></h3>
                <p>{description}</p>
            </div>
        </div>
    )
}

export default NewsItem