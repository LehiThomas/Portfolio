// A countdown latch allows you to count down from a number that you specify.
// It lets one or more threads wait until the latch reaches 0.
// When it hits 0 the other threads can proceed with their tasks.
// It is a thread-safe class so the synchronized keyword is not needed.
// 

import java.util.concurrent.CountDownLatch;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

class Job implements Runnable {
	private CountDownLatch latch;
	
	public Job(CountDownLatch latch){
		this.latch = latch;
	}
	
	public void run() {
		System.out.println("Started.");
		
		try {
			Thread.sleep(3000);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		latch.countDown();
	}
}

public class Latches {

	public static void main(String[] args) {
		
		CountDownLatch latch = new CountDownLatch(3);

		// Creates 3 threads
		ExecutorService executor = Executors.newFixedThreadPool(3);
		
		// Each Thread gets one Job (overkill just you get the idea)
		for(int i=0; i<3; i++){
			executor.submit(new Job(latch));
		}
		
		try {
			latch.await();
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		System.out.println("Completed.");
	}

}
