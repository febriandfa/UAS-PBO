public class Circle extends Shape {
    private int radius;
  
    public Circle(String color, int size, int radius) {
        super(color, size);
        this.radius = radius;
    }
  
    @Override
    public void draw() {
        System.out.println("Menggambar Lingkaran Warna : " + color + ", Ukuran : " + size + ", Jari-jari : " + radius + " cm");
    }
  }