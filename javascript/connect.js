// Install Node.js 
// Running' npm install pg' in your terminal.

const { Client } = require('pg');

const config = {
    host: 'localhost',
    port: '5432',
    database: 'DB_Testing',
    user: 'postgres',
    password: 'postgres'
};

// Create a new client instence
const client = new Client(config);

// Connect to database
client.connect()
.then(() => {
    console.log('connection success');
})
.catch(err => {
    console.error('A connection error occured', err.stack);
})
.finally(() => {
    // Close connection
    client.end();
})