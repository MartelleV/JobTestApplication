public class Main {
    public static void Main(string[] args) {
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