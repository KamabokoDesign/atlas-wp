# atlas-wp
 Atlas Wordpress Backend
 
 ## Step 1
1. Setup your WP container to run Wordpress locally
1. [Download and Install MAMP](https://www.mamp.info/en/downloads/)
1. Start up MAMP > Start > Should open in `localhost:8888` or `localhost`
1. Scroll down to MySQL or go to url `http://localhost:8888/phpMyAdmin/?lang=en`
1. Hit Databases > Create Database > Add a Database name > Name it the same thing as your next.js repo > Create

 ## Step 2
1. [You can download Wordpress here](https://wordpress.org/download/#download-install)
1. Applications > MAMP > htdocs > create a new folder, name it the same thing as your next.js repo
1. Open up your Wordpress download zip > open up the folder > select all files > copy > open up the MAMP wordpress htdocs folder
1. Open up your localhost at `http://localhost:8888/headlessnext` (headlessnext should be the name of your folder you put in the MAMP folder)
1. Choose your language
1. Database name should be the name of your next.js repo or the database you named in your Wordpress install
1. Username: root > Password: root > Database Host and Table Prefix keep default
1. Run the installation
1. Site title can be whatever you want
1. Username: root & Password: root
1. You in fam

## Step 3
1. Plugin installs
1. Install the `WPGraphQL` Wordpress Plugin & activate

The reason for favouring GraphQL is that it's faster than the REST API and GraphQL gives us the power and flexibility to return only the data we need. Using the WPGraphiQL plugins also allows us to both build our queries directly inside of our WordPress instance before moving them into Next.js. [Source](https://dev.to/kendalmintcode/configuring-wordpress-as-a-headless-cms-with-next-js-3p1o)

1. Install the [WPEngineHeadless plugin](https://wp-product-info.wpesvc.net/v1/plugins/wpe-headless?download)
1. Activate both plugins

## GraphQL
1. Enter the GraphQL IDE in your wordpress admin
1. In the explorer you'll see all the native WP data you can pull
1. For example you can do something like this:
```
import {useQuery, gql} from "@apollo/client";

const authorsQuery = gql`
 {
  users {
   nodes {
    avatar {
     url
    }
    firstName
    lastName
    roles {
     nodes {
     displayName
     }
    }
   }
  }
 }`;
 
 const AuthorsPage = () => {
  const {data} useQuery(authorsQuery);
  const authors = data?.users?.nodes ?? [];
  
  return (
  <>
  <div>
   <h1>Authors Page!</h1>
   <ol>
    {authors.map((author: any) => (
     <li>
      <img src={author.avatar.url} alt="" />
      <p>{author.firstName} {author.lastName}</p>
     </li>
    ))}
   </ol>
  </div>
  </>);
 }
 
 export default AuthorsPage;
