<?php

/*
    * git stash                                 =>> to hide all files in stash box after adding it to stage area.
                                                =>> i can't stash specific file from files they are all added 
                                                    at the same time.
    
    * git init                                  =>> to initialize git in this directory.
    
    * git remote add origin https://github.com/ahmedkoresh500/course.git    
                                        =>> copying from github into gitbash [working repo] =>> the first time only.
                                                
    * git push -u origin master                 =>> [-u] =>> [pull request] first => then [push request]
                                                =>> my work removed  =>> during [pull request]
                                                =>> [push] with [pull]  =>> warning message
    or
    
    * git pull origin master
    * git push origin master                    
    
    * echo "Hello World" > readme.txt           =>> to create new file =>> with content.
    
    * git reset head readme.txt                 =>> file in [stage area] -> [working directory].
    
    * git stash                                 =>> to hide these files in stash box after adding it to stage area.
    
    * git commit -m ""                          =>> files in [stage area] -> [local repo].
                                                =>> files in stash box won't be commited.
    
    * git stash list                            =>> [result = 0] =>> there are files in stash box.
    
    * git stash pop                             =>> to get files out of stash box and deleting it’s index.
    
    * git stash list                            =>> [result = nothing] =>> no files in stash box.
    
    * git commit -m ""                          =>> files in [stage area] -> [local repo]
                                                =>> files in stash box won't be commited.
    
    * git push origin master                    =>> [local repo] -> [remote repo]
*/
?>