import turtle

# Fungsi untuk menggambar simbol jantung
def draw_heart():
    turtle.fillcolor("blue")
    turtle.begin_fill()
    turtle.left(140)
    turtle.forward(224)
    turtle.circle(-90, 200)
    turtle.right(120)
    turtle.circle(-90, 200)
    turtle.forward(224)
    turtle.end_fill()

# Fungsi untuk menggambar daun
def draw_leaf():
    turtle.fillcolor("green")
    turtle.begin_fill()
    turtle.left(90)
    turtle.forward(60)
    turtle.right(90)
    turtle.forward(20)
    turtle.right(90)
    turtle.forward(60)
    turtle.left(90)
    turtle.forward(40)
    turtle.right(90)
    turtle.circle(-10, 180)
    turtle.right(90)
    turtle.forward(40)
    turtle.left(90)
    turtle.forward(60)
    turtle.right(90)
    turtle.forward(20)
    turtle.end_fill()

# Fungsi untuk menggambar tanda centang
def draw_checkmark():
    turtle.penup()
    turtle.goto(0, -150)
    turtle.pendown()
    turtle.pensize(5)
    turtle.color("green")
    turtle.right(45)
    turtle.forward(80)
    turtle.right(180)
    turtle.forward(160)

# Main program
turtle.speed(2)  # Kecepatan gambar turtle

# Menggambar simbol jantung
draw_heart()

# Menggambar daun pertama
turtle.penup()
turtle.goto(80, 60)
turtle.pendown()
draw_leaf()

# Menggambar daun kedua
turtle.penup()
turtle.goto(-80, 60)
turtle.pendown()
draw_leaf()

# Menggambar tanda centang
draw_checkmark()

# Menutup jendela turtle saat selesai
turtle.done()
