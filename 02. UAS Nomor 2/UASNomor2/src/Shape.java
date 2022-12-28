public class Shape {
    protected String color;
    protected int size;
  
    public Shape(String color, int size) {
        this.color = color;
        this.size = size;
    }
  
    public void draw() {
        System.out.println("Menggambar Bentuk Warna : " + color + ", Ukuran : " + size + " cm");
    }
}