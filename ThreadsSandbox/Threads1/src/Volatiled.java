// There are basically 2 threads running here. (One in main and one in run)
// This can create a problem when trying to stop a thread
// Sometimes the thread in run will store a cached version of
// the running variable and won't notice the shutdown method
// making it false. Or it will only look in itself.
// The volatile keyword fixes this. 
// It doesn't change the output at all but it guarantees 
// the thread to run and stop as told. 
// The volatile keyword prevents the thread from caching
// variables.


import java.util.Scanner;

class Processor extends Thread {
	private volatile boolean running = true;
	
	public void run() {
		while (running){
			System.out.println("hello");
			
			try {
				Thread.sleep(100);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
	}
	
	public void shutdown(){
		running = false;
	}
}
public class Volatiled {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Processor proc1 = new Processor();
		
		proc1.start();
		
		System.out.println("Press return to stop ...");
		Scanner scanner = new Scanner(System.in);
		scanner.nextLine();
		
		proc1.shutdown();
		
	}

}