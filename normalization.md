UNF
full_name
password
year_level
course
contact_number 
email
transaction_amount
transaction_date_time
transaction_description
transaction_reference
qr_code
student_id
balance
last_updated
role
profile_img


1NF
users_tbl
user_id (PK)
student_id
lastname
firstname
middlename
suffix
year_level
course
contact_number
email
balance
last_updated
role
password
profile_img

transaction_tbl
transaction_id (PK)
user_id (FK)
amount
date_time
description
reference

qr_tokens_tbl
qr_id (PK)
user_id (FK)
qr_data
expires_at
is_active
created_at

topup_tbl
topup_id (PK)
admin_id (FK)
user_id (FK)
amount
remarks
date_time


2NF
users_tbl
user_id (PK)
lastname
firstname
middlename
suffix
contact_number
email
balance
last_updated
role
password
profile_img

student_info
student_info_id (PK)
user_id (FK)
student_id
year_level
course

transaction_tbl
transaction_id (PK)
user_id (FK)
merchant_id (FK)
amount
date_time
description
reference

qr_tokens_tbl
qr_id (PK)
user_id (FK)
qr_data
expires_at
is_active
created_at

topup_tbl
topup_id (PK)
admin_id (FK)
user_id (FK)
amount
remarks
date_time


3NF
users_tbl
user_id (PK)
lastname
firstname
middlename
suffix
contact_number
email
role_id (FK)
password
profile_img

wallet_tbl
wallet_id (PK)
user_id (FK)
balance
last_updated

student_info
student_info_id (PK)
user_id (FK)
student_id
year_level
course_id (FK)

merchant_tbl
merchant_id (PK)
user_id (FK)
stall_name

transaction_tbl
transaction_id (PK)
merchant_id (FK)
wallet_id (FK)
amount
date_time
description
reference

qr_tokens_tbl
qr_id (PK)
user_id (FK)
qr_data
expires_at
is_active
created_at

topup_tbl
topup_id (PK)
admin_id (FK)
wallet_id (FK)
amount
remarks
date_time

role_tbl
role_id (PK)
role_name

course_tbl
course_id (PK)
course_code
course_name
