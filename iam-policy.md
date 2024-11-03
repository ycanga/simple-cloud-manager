{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Sid": "YOUR_SID", //AUTO CREATE
            "Action": "s3:*",
            "Effect": "Allow",
            "Resource": [
                "arn:aws:s3:::file-manager-project",
                "arn:aws:s3:::file-manager-project/*"
            ]
        }
    ]
}

// Use this web site for create a new policy. https://awspolicygen.s3.amazonaws.com/policygen.html