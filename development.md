# Deployment and development Description
**TODO: Add description - include AWS lightsail info**

# WorkFlows

#### Adding a new engineerc process
1.  Add to github 
2.  Add to Wordpress
3.  Add to AWS
4.  Add to Storage

**TODO: add in AWS details - filezilla - ssh - instance details - backup - auto snapshot**

#### Setting up local enviroment
**TODO: local enviroment details**

#### Pulling the theme files to local enviroment
1.  Pull theme files from [github](https://github.com/cp3402-students/cp3402-2022-1-site-team05.git)
**TODO: Add more detail on local enviroment?**

##### Making changes to The theme and pushing to Github
1.  Make changes on local enviroment. **TODO: Link to an example local enviroment setup**
2.  Test and verify on local enviroment.
3.  Document changes **TODO: Add link to document**
3.  Commit changes to [github](https://github.com/cp3402-students/cp3402-2022-1-site-team05.git). 
3.  Push to [github](https://github.com/cp3402-students/cp3402-2022-1-site-team05.git). 
5.  Github pushes to staging server automatically **TODO: link to how automation process operates**
6. Test and verify Documented changes **TODO: Add link to document**
7. When all documented changes are verified trigger a automated clone to production server **TODO: link to who to trigger a push**


#### Github To Staging process
**TODO Add process detail**

#### Making changes to content pages
1.  Changes to be made to [staging server](http://54.206.45.130/wp-admin/about.php) 
2.  Document changes **TODO: Add link to document**
3.  Test and verify Documented changes **TODO: Add link to document**
4.  When all documented changes are verified trigger a automated clone to production server **TODO: Add link to document**

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




**TODO: Add AWS details**
**TODO: Add AWS Manual Backup details**
**TODO: Add AWS Auto Backup details**
**TODO: Add AWS Restore details**
**TODO: Add AWS automation (Staging to GIT) details**
**TODO: Add GIT - AWS details**
**TODO: Add Storage location details**



# LINKS
1.  [github](https://github.com/cp3402-students/cp3402-2022-1-site-team05.git). 
2.  [staging server](http://54.206.45.130/wp-admin/about.php) 
3.  [Underscrores](https://underscores.me/)
4.  [All in one WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/)
	