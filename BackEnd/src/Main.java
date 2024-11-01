import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class Main {
    public static void Main(String[] args) {
        try {
            String url = "jdbc:msql://200.210.220.1:1114/Demo";
            Connection conn = DriverManager.getConnection(url,"","");
            Statement stmt = conn.createStatement();
            ResultSet rs;
 
            rs = stmt.executeQuery("SELECT * FROM users;");
            while ( rs.next() ) {
                String contact = rs.getString("contact");
                System.out.println(contact);
            }
        conn.close();
        }

        catch (Exception e) {
            System.err.println("Got an exception! ");
            System.err.println(e.getMessage());
        }
    }
}