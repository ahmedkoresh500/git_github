<?php

/*
    * [git stash]:
        [1] stash [untracked files] in [working directory] -> [stash box]  =>> from [git] [windows]
        [2] apply last [pull request]
        [3] files in [stash box]  =>> won't be staged  =>> won't be commited

    * git init                                  =>> to initialize git in this directory.
    * git remote add origin https://github.com/ahmedkoresh500/course.git    
                                        =>> add remote repo
    * git push -u origin master         =>> [-u] =>> [pull request] first => then [push request]
                                        =>> my work removed  =>> during [pull request]
    or
    * git pull origin master            =>> [push] without [pull]  =>> warning message
    * git push origin master
    
    * echo "Hello World" > my_file.txt  =>> to create new file =>> with content
    
    * [git stash list]              =>> [1] [result = nothing]  =>> [stash box] empty
    * [git stash]                   =>> stash [untracked files] in [working directory] -> [stash box]
    * [git stash list]              =>> [1] [result = 0] =>> [stash box] not empty
    * [git stash pop]               =>> unstash files in [stash box] -> [working directory]
                                    =>>  deleting it’s index.
    * [git stash list]              =>> [result = nothing] =>> [stash box] empty

    * [git reset head my_file.txt]  =>> file in [stage area] -> [working directory].
    * [git commit -m ""]            =>> files in [stage area] -> [local repo].
                                    =>> files in [stash box]  =>> won't be staged  =>> won't be commited.
    
    * [git push origin master]      =>> files in [local repo] -> [remote repo]
*/
?>