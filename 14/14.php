<?php
/*
    =>> git stash:
    * index [0, 1, 2, 3, 4].
    * 0  =>> newest stash
    * 4  =>> oldest stash
    
    =>> git stash pop       =>> [last in]->[first out] = index [0] =>> pop one index only

    * touch my_file.txt
    * nano my_file.txt
    * git add readme.txt
    * git stash             =>> stash [untracked files] in [working directory] -> [stash box] from [git], [windows]
                            =>> even staged
                            =>> [not through view hidden]

    * touch js
    * git add js                        =>> [untracked file] in working directory -> [stage area]
    * git stash save "readme file"      =>> to stash this file with text msg.
    **git  git stash list
    
    * touch hello.html                  =>> to create new file
    * git add hello.html                =>> [untracked file] in [working directory] -> [stage area].
    * git stash                         =>> stash files in [stash box].
    
    * git stash pop                     =>> unstash files from [stash box] =>> and deleting it's index.
    * git stash apply                   =>> unstash files from [stash box] =>> and not deleting it's index.
    
        => repeating this command =>> [to get same files out] of stash box.
        =>> + if i stashed it, it will stash it in a new stash.
        =>> and the old stash =>> remain the same.
        =>> two stashes =>> with the same content.

    * ls                                =>> to display [files and folders] in my computer.
    
    * git stash pop stash@{1}           =>> to get files out of stash box =>> [specific file] and deleting it's index.
    * git stash apply stash@{1}         =>> to get files out of stash box =>> [specific file] and not deleting it's                                                                                                                 index. 
    
    * git stash drop                    =>> to delete the newest stash with it's content =>> index = 0.
    * git stash drop stash@{}           =>> to delete specific stash with it's content.
    * git stash clear                   =>> to delete all stashes with their content.   
    
    ** git stash show                   =>> to show the content of the newest stash =>> index = 0.
    ** git stash show stash@{1}         =>> to show the content of specific stash.
    
    * H.W [Home Work] =>> make a branch from specific stash?
*/
?>