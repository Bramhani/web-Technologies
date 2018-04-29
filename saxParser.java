import java.io.*;
import org.xml.sax.*;
import org.xml.sax.helpers.*;
class saxParser
{
	public static void main(String []args)throws IOException
	{
		System.out.println("Enter the file Name");
		BufferedReader f = new BufferedReader( new InputStreamReader(System.in));
		String file_name = f.readLine();
		File file = new File(file_name);
		if(file.exists())
		{
			try
			{
				XMLReader reader = XMLReaderFactory.createXMLReader();
				reader.parse(file_name);
				System.out.println("WEl come");
			}
			catch(Exception e)
			{
				System.out.println("OUT");
			}
		}
	}
}

