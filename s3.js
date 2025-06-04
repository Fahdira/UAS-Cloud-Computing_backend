import AWS from 'aws-sdk';
import dotenv from 'dotenv';
dotenv.config();

const s3 = new AWS.S3({
  region: process.env.AWS_REGION
});

export function uploadToS3(file) {
  const params = {
    Bucket: process.env.S3_BUCKET,
    Key: Date.now() + '_' + file.originalname,
    Body: file.buffer,
    ACL: 'public-read'
  };
  return s3.upload(params).promise();
}
