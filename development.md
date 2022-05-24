# Deployment and development Description
The website is hosted on AWS Lightsale we have a staging server and a production server.
Local development is pushed to github for colabaration and version control.


# WorkFlows

#### Adding a new engineer process
1.  Add to github 
2.  Add to Wordpress
3.  Add to AWS
4.  Add to Storage


#### Pulling the theme files to local enviroment
1.  Pull theme files from [github](https://github.com/cp3402-students/cp3402-2022-1-site-team05.git)

##### Making changes to The theme and pushing to Github
1.  Make changes on local enviroment. 
2.  Test and verify on local enviroment.
4.  Commit changes to [github](https://github.com/cp3402-students/cp3402-2022-1-site-team05.git). 
5.  Push to [github](https://github.com/cp3402-students/cp3402-2022-1-site-team05.git). 
6.  Github pushes to staging server automatically 
7.  Add changes to the trello board
8.  Test Changes
9.  When all documented changes are verified trigger a clone to production server 


#### Github To Staging process
1.	Download the latest github repro
2.	Zip up the wp-content folder
3.	In word press select Apperance -> Themes -> Add New -> Select folder from step 2.

#### Making changes to content pages
1.  Changes to be made to [staging server](http://54.206.45.130/wp-admin/about.php) 
2.  Add changes to 
3.  Test and verify Documented changes on the trello board
4.  When all documented changes are verified trigger a clone to production server.

#### Documenting changes **TODO: make change control process**
1.  Describe change made
2.  Describe testing process (So someone else can test changes you ahve made)

#### Verify Documented changes
1.  Follow described testing process
2.  Verify change

## Staging to Production process

To migrate the staging server to production server the  [All-in-one WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/) plug in is used.

This plugin must be installled and active on both staging and production server.

#### Carry out the following on the staging server
```sh
Open the All-in-One WP Migration add on tool 
Click Export
Click EXPORT TO
Click File
Export will start.
After export has finished download file - take note of dowload folder
```

#### Carry out the following on the production server
```sh
Open the All-in-One WP Migration add on tool 
Click Import
Click IMPORT FROM
Click File
Select file location as noted in steps above
Import will carry out
Test Site
```
##### Hosting service
1.	AWS Lightsale is used to host both staging and production servers.
2.	The Production server is set up back up on a daily schedule, 7 back ups in total.

# LINKS
1.  [github](https://github.com/cp3402-students/cp3402-2022-1-site-team05.git). 
2.  [staging server](http://54.206.45.130/wp-admin/about.php) 
3.  [Underscrores](https://underscores.me/)
4.  [All in one WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/)
	