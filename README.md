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
1. For example you can do something like this in your Next.js build

So why use GraphQL over the native WP REST API? Maybe [this may answer your questions](https://www.wpgraphql.com/docs/wpgraphql-vs-wp-rest-api/)


## Some other plugins you can use (but I need to do more research)
1. Advanced Custom Fields
2. Custom Post Type UI
3. WPGraphQL Custom Post Type UI
4. WPGraphQL for Advanced Custom Fields


## CPT UI
1. Post Type Slug `teammembers`
2. Plural Label `Team Members`
3. Singular Label `Team Member`
4. Show in GraphQL `True`
5. Featured Image `unchecked`
6. GraphQL Single Name `teammember`
7. GraphQL Plural Name `teammembers`
8. Add new Team Member, enter the title! And you're in.

But dang no other fields? That's lame, that's where ACF comes in. 
1. Advanced Custom Fields
2. Add New Field Group `TeamMember`
3. Field Label `Bio`
4. Field Name `bio`
5. Field Type `text area`
6. Add Field +
7. Field Label `Twitter`
8. Field Name `twitter`
9. Field Type `text`
10. Location: Show this field if Post Type is equal to Team Member
11. Show in GraphQL `Yes`
12. GraphQL Field Name `acfTeamMember`

More fields should show up in your CPT! For more info [check out this tutorial](https://www.youtube.com/watch?v=Yp9zq384X5c&ab_channel=Gatsby)
