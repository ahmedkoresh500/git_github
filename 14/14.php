<?php
/*
    * touch readme.txt
    * git add readme.txt
    * git stash                         =>> it also hides files from computer[ not through view hidden ].
    
                                        =>> when using stash:
                                        =>> newest stash = index [ 0 ].
                                        =>> oldest stash = [ bigger ] index.
                                                        
                                        =>> when using pop:
                                        =>> last in = first out = index [ 0 ] =>> only one index for one pop.
                                                        
    * touch js
    * git add js                        =>> adding this file to stage area.
    * git stash save "readme file"      =>> to stash this file with text msg.
    ** git stash list
    
    
    * touch hello.html
    * git add hello.html                =>> adding this file to stage area.
    * git stash                         =>> to stash this file.
    
    
    * git stash pop                     =>> to get files out of stash box and deleting it's index.
    
    * git stash apply                   =>> to get files out of stash box and not deleting it's index.
    
                                        => repeating this command =>> [ to get same files out ] of stash box.
                                                
                                        =>> + if i stashed it, it will stash it in a new stash.
                                        =>> and the old stash =>> remain the same.
                                        =>> two stashes =>> with the same content.
                                                        
                                                        
    * ls                                =>> to show the files and folders on my computer.
    
    
    * git stash pop stash@{1}           =>> to get files out of stash box =>> [specific file] and deleting it's index.

    * git stash apply stash@{1}         =>> to get files out of stash box =>> [specific file] and not deleting it's                                                                                                                 index. 
    
    
    * git stash drop                    =>> to delete the newest stash with it's content =>> index = 0.
    
    * git stash drop stash@{}           =>> to delete specific stash with it's content.
    
    * git stash clear                   =>> to delete all stashes with their content.   

    
    ** git stash show                   =>> to show the content of the newest stash =>> index = 0.
    
    ** git stash show stash@{1}         =>> to show the content of specific stash.
    
    
    * H.W [ Home Work ] =>> make a branch from specific stash ?
*/
?>