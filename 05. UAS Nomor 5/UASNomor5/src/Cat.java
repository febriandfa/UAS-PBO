public class Cat extends Animal implements Pet {
    private String name;
    
    public Cat(String name) {
        super(4);
        this.name = name;
    }
    public Cat() {
        this("Unnamed");
    }
    public String getName() {
        return this.name;
    }
    public void setName(String name) {
        this.name = name;
    }
    public void play() {
        System.out.println(this.getName() + " Sedang Bermain Bola");
    }
    public void eat() {
        System.out.println(this.getName() + " Sedang Makan Ikan");
    }
}
