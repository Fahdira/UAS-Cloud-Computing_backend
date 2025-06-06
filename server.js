import express from 'express';
import dotenv from 'dotenv';
import multer from 'multer';
import cors from 'cors';
import { uploadToS3 } from './s3.js';
import { connectDB } from './db.js';

dotenv.config();

const app = express();
const upload = multer({ storage: multer.memoryStorage() });

connectDB();

app.use(cors());

app.get('/', (req, res) => {
  res.send('ok');
});

app.get('/api', (req, res) => {
  res.json({ message: 'Hello from backend!!' });
});

app.post('/upload', upload.single('file'), async (req, res) => {
  try {
    const result = await uploadToS3(req.file);
    res.json({ url: result.Location });
  } catch (err) {
    console.error(err);
    res.status(500).json({ error: 'Upload failed' });
  }
});

const port = process.env.PORT || 8080;
app.listen(port, () => console.log(`Backend running on port ${port}`));
