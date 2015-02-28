import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import java.util.concurrent.TimeUnit;

// Thread Pools are a way of managing lots of threads at the same time.
// Once one thread finishes a task it starts a new task.
// This saves overhead since you just have 2 threads (or as many
// as you want) running all the different tasks that you have.

class Tasks implements Runnable {
	private int id;
	
	public Tasks(int id) {
		this.id = id;
	}
	
	public void run() {
		System.out.println("Starting: " + id);
		
		try {
			Thread.sleep(5000);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		System.out.println("Completed: " + id);
	}
}

public class Pools {

	public static void main(String[] args) {
		
		ExecutorService executor = Executors.newFixedThreadPool(2);
		
		for(int i=0; i<5; i++){
			executor.submit(new Tasks(i));
		}
		
		// Waits for threads to complete tasks, then terminates them.
		executor.shutdown();
		
		System.out.println("All tasks submitted");
		
		try {
			executor.awaitTermination(1, TimeUnit.DAYS);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		System.out.println("All tasks completed.");
	}

}
