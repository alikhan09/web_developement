const db = require('./database');
const express = require('express');
const app = express();

app.post('./database', (req,res)=>
{
    const fn = req.body.fname;
    const ln=req.body.lname;
    const mail=req.body.email;

    db.query (`insert into employee values ("${fn}","${ln}","${mail}")`, (err,res)=>{
        if(err) throw err;
    });
});