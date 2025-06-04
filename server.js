import express from 'express';
import dotenv from 'dotenv';
import multer from 'multer';
import { uploadToS3 } from './s3.js';
import { connectDB } from './db.js';

dotenv.config();

const app = express();
const upload = multer({ storage: multer.memoryStorage() });

connectDB();

app.get('/health', (req, res) => {
  res.send('ok');
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
