<?php

/*
    * creating [public key] and sending it to github and testing it.
    
    * ssh               =>> secure shell
    * -key gen          =>> key generation
    * -t                =>> type of algorithm to generate the key
    
    * [rsa]             =>> [rivest], [shamir], [adleman]
    * [dsa]             =>> digital signature algorithm
    * [ecdsa]     
    
    * -b                =>> = the number of bits.
    * -C                =>> = the mail.             =>> must be uppercase
    
    * [ssh-keygen -t rsa -b 4096 -C "ahmedkoresh500@gmail.com"]      =>> [C] must be uppercase
    * then entering [password] [confirm password]
    
    * [id_rsa.pub]    =>> the public key was saved in this file
    
    * cat ~/.ssh/id_rsa.pub
                        =>> to show the content of the public key  =>> i copy it to create it on github
                        =>> it's not working
                        =>> i opened the file from the path =>> and copied it's content
    
    * from settings in github, i clicked [new ssh key]   =>> secure shell
    
    * i paste the content of [id_rsa.pub] in the key text =>> then add a title in the title box [my home pc].
    
    * [ssh -T git@github.com]
    
    =>> like writing an email to open facebook
    =>> then writing [yes] =>> then [enter] =>> then [password]
*/

?>