public class Fish extends Animal implements Pet {
    private String name;

    public Fish() {
        super(0);
    }
    public String getName() {
        return this.name;
    }
    public void setName(String name) {
        this.name = name;
    }
    public void play() {
        System.out.println(this.getName() + " Sedang Bermain Terumbu Karang");
    }
    public void walk() {
        System.out.println(this.getName() + " Sedang Berenang Dengan Sirip");
    }
    public void eat() {
        System.out.println(this.getName() + " Sedang Makan Lumut");
    }
}
