import React, {useState, useEffect} from "react"
import axios from 'axios'
import NewsItem from "./NewsItem"

const NewsList = () => {
    const[articles, setArticles] = useState<any[]>([])

    useEffect(() => {
        const getArticles = async() =>{
            const response = await axios.get('https://newsapi.org/v2/everything?q=react%20framework&from=2023-08-25&sortBy=publishedAt&apiKey=df0858dc51a14c64aca68bb361c7796c');
            console.log(response)
            setArticles(response.data.articles)
        }
        getArticles()
    },[])
    return(
        <div>
            {articles.map(articles => {
                return(
                    <NewsItem
                        title={articles.title}
                        description={articles.description}
                        url={articles.url}
                        urlToImage={articles.urlToImage}
                    />
                )
            })}
        </div>
    )
}

export default NewsList