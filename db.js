import { Pool } from 'pg';
import dotenv from 'dotenv';
dotenv.config();

const pool = new Pool({
  host: process.env.DB_HOST,
  port: process.env.DB_PORT,
  user: process.env.DB_USER,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_NAME
});

export function connectDB() {
  pool.connect()
    .then(() => console.log('Connected to PostgreSQL'))
    .catch(err => console.error('DB connection error:', err.stack));
}

export default pool;
