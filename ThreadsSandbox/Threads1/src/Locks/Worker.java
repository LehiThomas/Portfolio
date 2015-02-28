// How to speed up your multithreaded code by locking only those 
// sections of code that you need to, rather than using synchronized 
// methods and locking your whole object.
// Using the synchronized keyword solves the problem from the Synch demo
// , but it slows everything way down.
// This is unnecessary since each thread is running separate methods.
// So instead of synchronized methods we make synchronized code blocks.
// This allows 2 threads to run 2 separate methods at the same time.
// They can run the same method at the same time but when it comes to 
// the code block it must wait for the 1st thread to finish


package Locks;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;

public class Worker {
	
	private Random random = new Random();
	
	private Object lock1 = new Object();
	private Object lock2 = new Object();
	
	private List<Integer> list1 = new ArrayList<Integer>();
	private List<Integer> list2 = new ArrayList<Integer>();

	public void stageOne() {
		
		synchronized (lock1) {
			try {
				Thread.sleep(1);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			
			list1.add(random.nextInt(100));
		}	
	}
	
	public void stageTwo() {
		
		synchronized (lock2) {
			try {
				Thread.sleep(1);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			
			list2.add(random.nextInt(100));
		}		
	}
	
	public void process(){
		for(int i=0; i<1000; i++){
			stageOne();
			stageTwo();
		}
	}
	
	public void main() {
		System.out.println("Starting ...");

		long start = System.currentTimeMillis();
		
		Thread t1 = new Thread(new Runnable(){
			public void run() {
				process();
			}
		});
		
		Thread t2 = new Thread(new Runnable(){
			public void run() {
				process();
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
		
		long end = System.currentTimeMillis();
		
		System.out.println("Time taken: " + (end - start));
		System.out.println("List1: " + list1.size() + "; list2: " + list2.size());
	}

}
