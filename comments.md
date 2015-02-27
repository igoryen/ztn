1
--
initialize a new **cURL** session  
`resource curl_init ([ string $url = NULL ] )`
`retval` is a cURL **handle** 
It is for use with the functions
  `curl_setopt()`, 
  `curl_exec()`, and 
  `curl_close()`.

2
--
set all your options for the transfer
`curl_setopt (A,B,C)`
A = `resource $ch` ,   A cURL **handle** returned by `curl_init()`.  
B = `int $option` , the `CURLOPT_FILE` option to set
C = `mixed $value`, the value to be set on option, here - a stream

3
--
`curl_exec(A);`
execute A
A = the cURL session 

4
--
`curl_close(A)`
Close a cURL session and free all resources. Delete A
A = The cURL handle.
finish off your cURL session 

5
--
`fopen(A,B)`
binds A to a stream for B.
A = a named resource, specified by filename
B = mode. "w" = writing only


6
--
set all your options for the transfer
`curl_setopt (A,B,C)`
set a B on A, and C on B

A = `resource $ch` ,   A cURL **handle** returned by `curl_init()`.  
B = `int $option` , the `CURLOPT_HEADER` option to set
C =  `false` - `mixed $value`, the value to be set on option, here - a stream

7
--
`fgetcsv(A)`
Use A to open a file, gets one line from A and parse for CSV fields
A = a valid file pointer to a file successfully opened by `fopen()`, `popen()`, or `fsockopen()`.

8
--
get an array and read the value of its element 13 i.e. "postal code"