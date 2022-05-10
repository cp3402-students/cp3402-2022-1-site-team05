deployment.md – Describe your development and deployment workflow in enough detail that a
new team member or someone taking over the project could follow to successfully develop theme
updates locally, then test and deploy them to your staging and live sites. This should include aspects
such as project management, version control, testing and automation. Do not provide private details
like passwords.

Local Development - The team will pull from remote git repo (https://github.com/cp3402-students/cp3402-2022-1-site-team05/) to work on and push changes as neccessary
Database control - The database is updated from the staging site and dumped as backup when neccessary
Deloyment to staging site - Staging environment is connecteed to remote repository above. When changes need to be staged, a git pull can be run on the server to update wp-content folder. (Automation to be added later)
To pull the repro to staging enviroment log in to AWS lightsail -> open terminal for staging instance -> cd to opt/bitnami/wordpress/wp-content$ type -> **INFO needed
	