<?php

/*
    * git stash                                 =>> to hide all files in stash box after adding it to stage area.
                                                =>> i can't stash specific file from files they are all added 
                                                    at the same time.
    
    * git init                                  =>> to initialize git in this directory.
    
    * git remote add origin https://github.com/ahmedkoresh500/course.git    
                                        =>> copying from github into gitbash [ working repo ] =>> the first time only.
                                                
    * git push -u origin master                 =>> [ -u ] 
                                                =>> to pull the latest version on github.
                                                =>> then push my modifications.
    or
    
    * git pull origin master                    =>> if there are modifications on github,
                                                    i won't make push, before pull request.
                                                =>> if i push directly =>> cmder program warning message.
    * git push origin master                    
                                                =>> this command and the above are equal.
    
    
    
    * echo "Hello World" > readme.txt           =>> to create file with this content.
    
    * git reset head readme.txt                 =>> to unstage this file.
    
    * git stash                                 =>> to hide these files in stash box after adding it to stage area.
    
    * git commit -m ""                          =>> commiting these files to local repo [ local branch ] [ branch ].
                                                =>> files in stash box won't be commited.
    
    * git stash list                            =>> it will print [ 0 ] =>> means, there are files in stash box.
    
    * git stash pop                             =>> to get files out of stash box and deleting it’s index.
    
    * git stash list                            =>> it will print [ nothing ] =>> means, no files in stash box.
    
    * git commit -m ""                          =>> commiting these files to local repo [ local branch ] [ branch ].
                                                =>> files in stash box won't be commited.
    
    * git push origin master                    =>> to push these files on github.
*/
?>