from faker import Faker
import random
fake = Faker('vi_VN')  # Sử dụng ngôn ngữ Việt Nam cho tên người
print("----------------------------")
# Tạo dictionary chứa tên người và tên viết liền không dấu + thêm 123
ten_nguoi = []
for i in range(200):
    ten = fake.first_name()
    last_name = fake.last_name()
    email = fake.email()
    sdt = '0'
    for i in range(0, 9):
        num = str(random.randint(1, 9))
        sdt += num
    user = fake.user_name()
    # ten_khong_dau = ''.join(c for c in ten if c.isalnum())  # Loại bỏ dấu và ký tự đặc biệt
    ten_viet_lien_khong_dau = user + '123'
    ten_nguoi.append(ten)
    ten_nguoi.append(last_name)
    ten_nguoi.append(email)
    ten_nguoi.append(sdt)
    ten_nguoi.append(user)
    ten_nguoi.append(ten_viet_lien_khong_dau)
# In ra dictionary
print(ten_nguoi)
# in ra insert into bảng 
print("-------------------------------------")
print("-------------------------------------")
print("-------------------------------------")
i = 4
for j in range(200):
    print(f'(\'{ten_nguoi[i]}\', \'{ten_nguoi[i+1]}\', \'3\'),')
    i+=6
print("------------------")
id_data = 0
ma_tai_khoan = 32
for n in range(200):
    trinh_do = str(random.randint(3, 10))
    print(f'(\'{ma_tai_khoan+1}\', \'{ten_nguoi[id_data]}\', \'{ten_nguoi[id_data+1]}\', \'{ten_nguoi[id_data+2]}\', \'{ten_nguoi[id_data+3]}\', \'{trinh_do}\'),')
    id_data += 6
    ma_tai_khoan+=1

#fake diểm
ma_lop = 0
ma_hoc
for d in range(60):

