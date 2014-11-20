Smvdu-Alumni
============
This is the Official Repository of Smvdu Alumni Portal.

## Installation Instructions

To install this project on your computer , you to have install some dependencies of this project :

1. LAMP/WAMP/MAMP Server

2. PhpMyAdmin

3. Create a database named `smvdu-alumni-db` 

4. Create an user for a database having these credentials

    ```
        Host: localhost
        Name: smvdu
        Password: smvdu
    ```

5. If you clone this project in a directory other than *default* **www/** , then you have to set a new `virtualhost` in *apache* configuration file.Just run **set_virtual_host.sh** file by writing :- 
    ```python
        $ sudo chmod 765 set_virtual_host.sh
        $ ./set_virtual_host.sh
    ```

    After this, go to `http://smvdualumni.localhost` to access the website(if you have done step 5), otherwise just go to `http://localhost/smvdu-alumni/` if your project is in **www/** directory.

6. Use this data during first-time wordpress installing process :-
    ```
          Site Title : Smvdu Alumni
            Username : smvdu
            Password : smvdu
            Email-Id : testingbeta256@gmail.com
    ``` 

7. We also used a wordpress plugin named as **[Revisr](http://revisr.io/)** , to manage Git Integration with wordpress.So, first of all read about it and install/setup it in this project as per in its docs. [Click here to read Revisr Doc](http://revisr.io/documentation/)

8. For Installing new plugins/themes , you need to have a local **FTP** server installed .So you should need to install *vsftpd* package on ubuntu to install ftp server in your computer.[Refer this Link to install and setup vsftpd package](http://www.krizna.com/ubuntu/setup-ftp-server-on-ubuntu-14-04-vsftpd/)

Note: Always use revisr plugin dashboard to commit and must tick an option `Backup Database`. Otherwise, your changes would not reflect in other team member machine.

## Contribution Guidelines

Fork this repository to your account, using the **Fork** button on the top right corner.

Use `git clone` to clone your forked repo to your local machine:
(replace 'your_username' with appropriate value)
```
git clone https://github.com/your_username/smvdu-alumni.git
```
<br>
Set the `upstream` to this repo:

The easiest way is to use the https url:
```
git remote add upstream https://github.com/smvdu/smvdu-alumni.git
```

or if you have ssh set up you can use that url instead:
```
git remote add upstream git@github.com:smvdu/smvdu-alumni.git
```

<br>
Working branch for **sfd-alumni** will always be the `develop` branch. Hence, all the latest code will always be on the *develop* branch.
You should always create a new branch for any new piece of work branching from *develop* branch:
```
git branch new_branch
```
**NOTE:** You must not mess with `master` branch or bad things will happen.
*master* branch contains the latest stable code, so just leave it be.

Before starting any new piece of work, move to *develop* branch:
```
git checkout develop
```
<br>
Now you can fetch latest changes from main repo using:
```
git fetch upstream
```
<br>
`rebase` the latest code with *develop* branch:
```
git rebase upstream/develop
```
<br>
`checkout` to your newly created branch:
```
git checkout new_branch
```
<br>
Rebase the code of *new_branch* from the code in *develop* branch, run the `rebase` command from your current branch:
```
git rebase develop
```
Now all your changes on your current branch will be based on the top of the changes in *develop* branch.

Push your changes to your forked repo
```
git push origin new_branch
```
<br>
Now, you can simply send the Pull Request to Parent Repo from within the Github.

Always squash up your commits into a single commit before sending the Pull Request. Use `git rebase -i` for this purpose. For example to squash last 3 commits into a single commit, simply run:
```
git rebase -i HEAD~3
```

####Happy Coding :)
