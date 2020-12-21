public class IntegerHashMain {
    public static void main(String[] args) {
        String filePath = "Materials/BigNumbersWithInteger.txt";
        IntegerHash bigNumList = new IntegerHash(20);
        Scanner strMark = null;
        String line;
        StringTokenizer strToken = null;
        try {
            strMark = new Scanner(new File(filePath));
            while(strMark.hasNext()) {
                line = strMark.nextLine();
                strToken = new StringTokenizer(line);
                bigNumList.put(strToken.nextToken(), Integer.parseInt(strToken.nextToken()));
            } 
        }
        catch(Exeption e) {}
        finally{strMark.close();}
        for (int i=0; i<bigNumList.getIndex(); i++ ){
            System.out.println(bigNumList.getKey(i) + ":" + bigNumList.getValue(bigNumList.getKey(i)));
        }
    }
}