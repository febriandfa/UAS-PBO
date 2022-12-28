public class Main {
    public static void main(String[] args) {
        Animal hewan = new Animal(4);
        hewan.walk();
        hewan.eat();
        System.out.println();
        
        Spider laba = new Spider();
        laba.eat();
        System.out.println();
        
        Cat kucing = new Cat();
        kucing.setName("Ucing");
        System.out.println("Nama Kucing ini " + kucing.getName());
        kucing.play();
        kucing.eat();
        System.out.println();

        Fish ikan = new Fish();
        ikan.setName("Blukutuk");
        System.out.println("Nama Kucing ini " + ikan.getName());
        ikan.play();
        ikan.walk();
        ikan.eat();
    }
}
