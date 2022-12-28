public class Rectangle extends Shape {
    private int side;
  
    public Rectangle(String color, int size, int side) {
        super(color, size);
        this.side = side;
    }
  
    @Override
    public void draw() {
        System.out.println("Menggambar Persegi Warna : " + color + ", Ukuran : " + size + ", Sisi : " + side + " cm");
    }
  }