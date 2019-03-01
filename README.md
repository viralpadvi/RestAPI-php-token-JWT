# RestAPI-php-token-JWT

file droped localhost config after try to postman this example.

input data:
{
	"name":"generateToken",
	"param":{
		"email":"test123@gmail.com",
		"pass":"test@123"
	}
}

* output


{
    "resonse": {
        "status": "200",
        "result": {
            "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1NTE0MjQzMTAsImlzcyI6ImxvY2FsaG9zdCIsImV4cCI6MTU1MTQyNTIxMCwidXNlcklkIjoiOCJ9.lVHk-hrsFCxc3dvsrS6t2Kcz3m_G-oCgctSUzs0PIc8"
        }
    }
}
