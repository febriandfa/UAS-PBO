public class Main {
    public static void main(String[] args) {
        Shape bentuk = new Shape("Kuning", 10);
        bentuk.draw();
  
        Circle lingkaran = new Circle("Biru", 20, 5);
        lingkaran.draw();
        Rectangle persegi = new Rectangle("Merah", 20, 5);
        persegi.draw();
    }
}