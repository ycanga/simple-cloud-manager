{
    "Version": "2012-10-17",
    "Id": "POLİCY_ID", // AUTO CREATE
    "Statement": [
        {
            "Sid": "YOUR_SID", //AUTO CREATE
            "Effect": "Allow",
            "Principal": "*",
            "Action": "s3:*",
            "Resource": "arn:aws:s3:::YOUR_BUCKET_NAME/*",
            "Condition": {
                "StringNotEquals": {
                    "s3:x-amz-server-side-encryption": "AES256"
                }
            }
        }
    ]
}

// Use this web site for create a new policy. https://awspolicygen.s3.amazonaws.com/policygen.html