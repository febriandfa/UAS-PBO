public class Animal {
    protected int legs;

    protected Animal(int legs) {
        this.legs = legs;
    }
    public void walk() {
        System.out.println("Hewan Berjalan Dengan " + legs + " Kaki");
    }
    public void eat() {
        System.out.println("Hewan Sedang Makan");
    }
}
