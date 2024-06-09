<?php
/*
    * git branch                                    =>> to print all branches i have in this directory.
    
    * git branch scroll                             =>> to create new branch [ scroll ].
    
    * git checkout scroll                           =>> to switch from master branch to scroll branch.
    
    * git checkout master                           =>> to switch from scroll branch to master branch.
    
    * git checkout -b main                          =>> another way to create new branch =>> then switching it.
    
    * git branch -d scroll      [ d small ]         =>> to delete this branch [ safe delete ].
                                [ d capital ]       =>> to delete this branch [ with no safe delete ].
    
    * git branch -m development                     =>> to rename the branch i'm switching it now.
    
    
    
    
    =>> ex: using main branch to make a commit =>> then merging it with master branch.
    
    * git checkout main
    * touch index.html
    * git add index.html
    * git commit -m "testing main branch"
    * git checkout master
    * git merge main                                =>> to merge main branch with master branch.
    
*/
?>