import java.util.Random;
import java.util.concurrent.ArrayBlockingQueue;
import java.util.concurrent.BlockingQueue;

// The Producer-Consumer pattern implemented in Java
// ArrayBlockingQueue - Also thread-safe (don't have to worry about thread synchronization)
// What is Happening:
// The producer is adding stuff as fast as it can to the queue while
// the consumer takes things off.
// When the queue is full, put waits until something is taken off, and then
// puts another thing on. Take would also wait for something to be on 
// the queue to take it off. 


public class Blocking {
	
	private static BlockingQueue<Integer> queue = new ArrayBlockingQueue<Integer>(10);

	public static void main(String[] args) {
		Thread t1 = new Thread(new Runnable(){
			public void run() {
				try {
					producer();
				} catch (InterruptedException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
			}
			
		});
		Thread t2 = new Thread(new Runnable(){
			public void run() {
				try {
					consumer();
				} catch (InterruptedException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
			}
			
		});
		
		t1.start();
		t2.start();
		
		try {
			t1.join();
			t2.join();
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	private static void producer() throws InterruptedException {
		Random random = new Random();
		while(true){
			queue.put(random.nextInt(100));
		}
	}
	
	private static void consumer() throws InterruptedException {
		Random random = new Random();
		while(true){
			Thread.sleep(100);
			
			if(random.nextInt(10) == 0) {
				Integer value = queue.take();
				
				System.out.println("Taken value: " + value + "; Queue size is: " + queue.size());
			}
		}
	}
}
